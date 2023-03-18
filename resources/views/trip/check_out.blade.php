@extends('layouts.master_web')



@section('css')

<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
<!--- Custom-scroll -->
<link href="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet">
@section('title')
    اكمال عملية الدفع
@stop
@endsection



@section('content')



<main id="rlr-main" class="rlr-main--fixed-top">
    <div class="rlr-section__content--md-top">
      <div class="rlr-section rlr-section__my">
        <div class="rlr-checkout">
          <article id="post-7" class="post-7 page type-page status-publish hentry">
            <div class="container-xxl">
              <div class="entry-content">
                <div class="woocommerce">
                  @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if (session('success'))
    <script>
        Swal.fire({
            title: '{{ session('success') }}',
            icon: 'success',
            showConfirmButton: false,
            timer: 10000
        });
    </script>
@endif

@if (session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('Add') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if (session()->has('Edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('Edit') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


@if (session()->has('delete'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('delete') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session()->has('Error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('Error') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
                  <div class="woocommerce-info">
                    <div class="rlr-page-title">
                      <span class="rlr-page-title__icon"> <i class="rlr-icon-font flaticon-carbon-shopping-cart"> </i> </span>
                      <div>
                        <h2 class="type-h3 rlr-page-title__title">الدفع</h2>
                        <span class="rlr-page-title__desc">بقيت خطوة واحدة لرحلتك ....</span>
                      </div>
                    </div>
                  </div>
                  <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display: none">
                    <p>If you have a coupon code, please apply it below.</p>
                    <p class="form-row form-row-first">
                      <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code" id="coupon_code" value="" />
                    </p>
                    <p class="form-row form-row-last">
                      <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                    </p>
                    <div class="clear"></div>
                  </form>
                  <div class="woocommerce-notices-wrapper"></div>
                  <form  method="post" class="checkout woocommerce-checkout" action="{{route('book.store')}}" enctype="multipart/form-data" novalidate="novalidate">
                    {{ method_field('post') }}
                    {{ csrf_field() }}
                    <div class="col2-set" id="customer_details">
                      <div class="col-1">
                        <div class="woocommerce-billing-fields">
                          <div class="woocommerce-billing-fields__field-wrapper">
                            <h6 class="checkout__section-title">
                              <span>معلومات شخصية </span>
                            </h6>
                            <div class="checkout__personal-details">
                              <p class="form-row form-row-first validate-required" id="billing_first_name_field" data-priority="10">
                                <label for="billing_first_name" class=""> الاسم الاول </label>
                                <span class="woocommerce-input-wrapper">
                                  <input type="text" class="input-text" name="name" id="billing_first_name" placeholder="John" value="" autocomplete="given-name" />
                                </span>
                              </p>
                              <p class="form-row form-row-last validate-required" id="billing_last_name_field" data-priority="20">
                                <label for="billing_last_name" class=""> الاسم الاخير </label>
                                <span class="woocommerce-input-wrapper">
                                  <input type="text" class="input-text" name="end_data" id="billing_last_name" placeholder="doe" value="" autocomplete="family-name" />
                                </span>
                              </p>
                              <p class="form-row form-row-wide validate-required validate-phone" id="billing_phone_field" data-priority="100">
                                <label for="billing_phone" class=""> رقم الهاتف </label>
                                <span class="woocommerce-input-wrapper">
                                  <input type="tel" class="input-text" name="phone" id="billing_phone" placeholder="XXXXXXXXXX" value="" autocomplete="tel" />
                                </span>
                              </p>
                              <p class="form-row form-row-wide validate-required validate-email" id="billing_email_field" data-priority="110">
                                <label for="billing_email" class=""> البريد الاكتروني </label>
                                <span class="woocommerce-input-wrapper">
                                  <input type="email" class="input-text" name="email" id="billing_email" placeholder="jd@emprise.tours" value="" autocomplete="email" />
                                </span>
                              </p>
                           
                            </div>
                           
                          
                            <h6 class="checkout__section-title">
                              <span> بيانات الدفع  </span>
                            </h6>
                            <div id="payment"  class="woocommerce-checkout-payment">
                              <ul class="wc_payment_methods payment_methods methods">
                                <li class="wc_payment_method payment_method_stripe payment-details__visa">
                                  <label for="payment_method_stripe"> فيزا   </label>
                                  <input id="payment_method_stripe" type="radio" class="input-radio" name="pay"  value="stripe" data-order_button_text="" />
                                </li>
                                <li class="wc_payment_method payment_method_cod payment-details__master-card">
                                  <label for="payment_method_cod"> حساب بنكي </label>
                                  <input id="payment_method_cod" type="radio" class="input-radio" name="pay"  value="cod" data-order_button_text="" />
                                  <div class="payment_box payment_method_cod" style="display: none">
                                    <p>Pay with cash upon delivery.</p>
                                  </div>
                                </li>
                                <li class="wc_payment_method payment_method_cheque payment-details__paypal">
                                  <label for="payment_method_cheque"> باي بال </label>
                                  <input id="payment_method_cheque" type="radio" class="input-radio" name="pay"  value="cheque" data-order_button_text="" />
                                  <div class="payment_box payment_method_cheque" style="display: none">
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                  </div>
                                </li>
                                <li class="wc_payment_method">
                                  <p class="form-row woocommerce-SavedPaymentMethods-saveNew woocommerce-validated payment-details__add-card">
                                    <label for="wc-stripe-new-payment-method" style="display: inline"> Add credit/debit card </label>
                                    <input id="wc-stripe-new-payment-method" class="input-radio" name="pay"  type="radio" checked="checked" value="true" />
                                  </p>
                                </li>
                              </ul>
                              <div class="form-row place-order">
                                <noscript>
                                  Since your browser does not support JavaScript, or it is disabled, please ensure you click the
                                  <em> Update Totals </em>
                                  button before placing your order. You may be charged more than the amount stated above if you fail to do so.
                                  <br />
                                  <button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                                </noscript>
                                <div class="woocommerce-terms-and-conditions-wrapper">
                                  <div class="woocommerce-privacy-policy-text"></div>
                                </div>
                                <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="594806c7c0" />
                                <input type="hidden" name="_wp_http_referer" value="/wp/?wc-ajax=update_order_review" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-2">
                        <div class="woocommerce-shipping-fields"></div>
                        <div class="woocommerce-additional-fields">
                          <h3>Additional information</h3>
                          <div class="woocommerce-additional-fields__field-wrapper">
                            <p class="form-row notes" id="order_comments_field" data-priority="">
                              <label for="order_comments" class="">
                                Order notes
                                <span class="optional"> (optional) </span>
                              </label>
                              <span class="woocommerce-input-wrapper">
                                <textarea name="order_comments" class="input-text" id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="order_review" class="woocommerce-checkout-review-order">
                      <table class="shop_table woocommerce-checkout-review-order-table">
                        <tbody>
                          <tr class="cart_item">
                            <td class="product-name">
                              <h6 class="cart-item-title">طلبك</h6>
                              <ul class="cart-item-card">
                                <li class="cart-item-card__header">
                                  <div>
                                    <img class="cart-item-card__img" src="./assets/images/card_items-photo.jpg" alt="..." />
                                  </div>
                                  <div>
                                    <p class="cart-item-card__title">Mountain Hiking Tour</p>
                                    <p class="cart-item-card__date">
                                      <span> Preferred date </span>
                                      <span> 21/04/22 </span>
                                    </p>
                                  </div>
                                </li>
                      
                          
                                <li class="cart-item-card__footer">
                                  <p>المجموع</p>
                                  <p>AED 10,500</p>
                                </li>
                              </ul>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td>
                              <input class="enter-coupon" type="text" placeholder="Enter Coupon" />
                            </td>
                          </tr>
                          <tr class="order-total">
                            <th>السعر النهائي</th>
                            <td>
                              <strong>
                                <span class="woocommerce-Price-amount amount">
                                  <bdi>
                                    <span class="woocommerce-Price-currencySymbol"> $ </span>
                                    10,500
                                  </bdi>
                                </span>
                              </strong>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">الحجز الان</button>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </form>
                </div>
              </div>
              <!-- .entry-content -->
            </div>
          </article>
          <!-- #post-7 -->
        </div>
      </div>
    </div>
  </main>
@endsection



@section('js')

<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Jquery.mCustomScrollbar js-->
<script src="{{URL::asset('assets/plugins/custom-scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!--Internal  Clipboard js-->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Internal Prism js-->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
@endsection