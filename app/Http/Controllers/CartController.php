<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Session;
use App\Profile;

class CartController extends Controller
{
    public function index(Request $request){
        // Session::forget('cart');
        if(Session::has('cart')){
            $cartSession = Session('cart');
            // dd($cartSession);
            $cartProductId = '';
            foreach($cartSession['data'] as $cartSessionKey => $cartSessionVal){
                if($cartProductId == ''){
                    $cartProductId = $cartSessionKey;
                } else{
                    $cartProductId = $cartProductId.','.$cartSessionKey;
                }
            }

            $client = new Client;
            $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'product/detail/list', [
                'query' => ['owner' => env('OWNER_ID', 1), 'productIdList' => $cartProductId]
            ]);

            $responseData = json_decode($response->getBody()->getContents());
            $productList = $responseData->isResponse->data;

            $cartData = array();
            foreach($productList as $productList){
                $break = false;
                foreach($cartSession['data'] as $cartSessionKey => $cartSessionVal){
                    if(!$break){
                        if($productList->Id == $cartSessionKey){
                            foreach($cartSessionVal as $cartSessionKey2 => $cartSessionVal2){
                                if(!$break){
                                    if($productList->ColorId == $cartSessionKey2){
                                        foreach($cartSessionVal2 as $cartSessionKey3 => $cartSessionVal3){
                                            if(!$break){
                                                if($productList->SizeId == $cartSessionKey3){
                                                    $cartData[] = array(
                                                        'productId' => $productList->Id,
                                                        'name' => $productList->Name,
                                                        'colorId' => $productList->ColorId,
                                                        'colorName' => $productList->ColorName,
                                                        'sizeId' => $productList->SizeId,
                                                        'sizeName' => $productList->SizeName,
                                                        'discountType' => $productList->DiscountType,
                                                        'discount' => $productList->Discount,
                                                        'total' => $cartSessionVal3,
                                                        'totalAvailable' => $productList->Total,
                                                        'price' => $productList->Price,
                                                    );
                                                    $break = true;
                                                    break;
                                                }
                                            } else{
                                                break;
                                            }
                                        }
                                    }
                                } else{
                                    break;
                                }
                            }
                        }
                    } else{
                        break;
                    }
                }
            }
        } else{
            $cartData = null;
        }

        $data = array(
            'cartData' => $cartData
        );

        return view('cart', $data);
    }

    public function addToCart(Request $request){
        $countCartTotal = 0;
        if(Session::has('cart')){
            $cartSession = Session('cart');
            $cartSessionTemp = $cartSession;
            $countCartTotal = $request->total + $cartSession['total'];
            $cartSessionTemp['total'] = $countCartTotal;
            $break = false;
            $sessionExist = false;

            foreach($cartSession['data'] as $cartSessionKey => $cartSessionVal){
                if(!$break){
                    if($cartSessionKey == $request->id){
                        foreach($cartSessionVal as $cartSessionKey2 => $cartSessionVal2){
                            if(!$break){
                                if($cartSessionKey2 == $request->color){
                                    foreach($cartSessionVal2 as $cartSessionKey3 => $cartSessionVal3){
                                        if($cartSessionKey3 == $request->size){
                                            $cartSessionTemp['data'][$cartSessionKey][$cartSessionKey2][$cartSessionKey3] = $cartSessionVal3 + (int) $request->total;
                                            $sessionExist = true;
                                            $break = true;
                                            break;
                                        } else{
                                            $sessionExist = true;
                                            $cartSessionTemp['data'][$cartSessionKey][$cartSessionKey2][$request->size] = (int) $request->total;
                                        }
                                    }
                                } else{
                                    $sessionExist = true;
                                    $cartSessionTemp['data'][$cartSessionKey][$request->color][$request->size] = (int) $request->total;
                                }
                            } else{
                                break;
                            }
                        }
                    } else{
                        $sessionExist = true;
                        $cartSessionTemp['data'][$request->id][$request->color][$request->size] = (int)$request->total;
                    }
                } else{
                    break;
                }
            }
        } else{
            $countCartTotal = (int) $request->total;
            $cartSessionTemp['total'] = (int) $countCartTotal;
            $cartSessionTemp['data'][$request->id] = array($request->color => array($request->size => (int) $request->total));
        }

        Session::put('cart', $cartSessionTemp);

        return json_encode($countCartTotal);
    }

    public function getPhoto(Request $request){
        $dataExplode = explode('-', $request->id);

        $client = new Client;
        $response = $client->request('GET', env('API_URL', 'http://192.168.1.103:212/api/v1/').'product/detail/photo-by-color', [
            'query' => ['owner' => env('OWNER_ID', 1), 'productId' => $dataExplode['1'], 'color' => $dataExplode['2']]
        ]);

        $responseData = json_decode($response->getBody()->getContents());
        $photo = $responseData->isResponse->data;

        return $photo[0]->Photo;
    }

    public function updateCart(Request $request){
        if(Session::has('cart')){
            $sessionCart = Session('cart');
            $sessionCartTemp = $sessionCart;
            $data = explode('-',$request->id);
            $break = false;

            foreach($sessionCart['data'] as $sessionCartKey => $sessionCartVal){
                if(!$break){
                    if($sessionCartKey == $data[1]){
                        foreach($sessionCartVal as $sessionCartKey2 => $sessionCartVal2){
                            if(!$break){
                                if($sessionCartKey2 == $data[2]){
                                    foreach($sessionCartVal2 as $sessionCartKey3 => $sessionCartVal3){
                                        if($sessionCartKey3 == $data[3]){
                                            $sessionCartTemp['data'][$sessionCartKey][$sessionCartKey2][$sessionCartKey3] = $request->total;
                                            $break = true;
                                            break;
                                        }
                                    }
                                }
                            } else{
                                break;
                            }
                        }
                    }
                } else{
                    break;
                }
            }

            Session::put('cart', $sessionCartTemp);
        } else{
            return 'error';
        }
    }

    public function deleteCart(Request $request){
        if(Session::has('cart')){
            $sessionCart = Session('cart');
            $sessionCartTemp = $sessionCart;
            $data = explode('-',$request->id);

            $break = false;

            foreach($sessionCart['data'] as $sessionCartKey => $sessionCartVal){
                if(!$break){
                    if($sessionCartKey == $data[1]){
                        foreach($sessionCartVal as $sessionCartKey2 => $sessionCartVal2){
                            if(!$break){
                                if($sessionCartKey2 == $data[2]){
                                    foreach($sessionCartVal2 as $sessionCartKey3 => $sessionCartVal3){
                                        if($sessionCartKey3 == $data[3]){
                                            unset($sessionCartTemp['data'][$sessionCartKey][$sessionCartKey2][$sessionCartKey3]);
                                            $break = true;
                                            break;
                                        }
                                    }
                                }
                            } else{
                                break;
                            }
                        }
                    }
                } else{
                    break;
                }
            }

            Session::put('cart', $sessionCartTemp);
        } else{
            return 'error';
        }
    }
}
