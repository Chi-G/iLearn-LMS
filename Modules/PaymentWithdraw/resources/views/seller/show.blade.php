@extends('instructor.master_layout')
@section('title')
    <title>{{ __('translate.Withdrawal Details') }}</title>
@endsection

@section('body-header')
    <h3 class="crancy-header__title m-0">{{ __('translate.Withdrawal Details') }}</h3>
    <p class="crancy-header__text">{{ __('translate.My Withdrawal') }} >> {{ __('translate.Withdrawal Details') }}</p>
@endsection

@section('body-content')
    <!-- crancy Dashboard -->
    <section class="crancy-adashboard crancy-show">
        <div class="container container__bscreen">
            <div class="row">
                <div class="col-12">
                    <div class="crancy-body">
                        <div class="crancy-dsinner">

                            <div class="crancy-table crancy-table--v3 mg-top-30">

                                <div class="crancy-customer-filter">
                                    <div class="crancy-customer-filter__single crancy-customer-filter__single--csearch d-flex items-center justify-between create_new_btn_box">
                                        <div class="crancy-header__form crancy-header__form--customer create_new_btn_inline_box">
                                            <h4 class="crancy-product-card__title">{{ __('translate.Withdraw Detail') }}</h4>

                                        </div>
                                    </div>
                                </div>

                                <!-- crancy Table -->
                                <div id="crancy-table__main_wrapper" class=" dt-bootstrap5 no-footer">

                                    <table class="crancy-table__main crancy-table__main-v3 no-footer">

                                        <!-- crancy Table Body -->
                                        <tbody class="crancy-table__body review-detials">

                                            <tr class="odd">
                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ __('translate.Total Amount') }}</h4>
                                                </td>

                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ currency($withdraw->total_amount) }}</h4>
                                                </td>
                                            </tr>

                                            <tr class="odd">
                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ __('translate.Withdraw Amount') }}</h4>
                                                </td>

                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ currency($withdraw->withdraw_amount) }}</h4>
                                                </td>
                                            </tr>

                                            <tr class="odd">
                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ __('translate.Withdraw Charge') }}</h4>
                                                </td>

                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ currency($withdraw->charge_amount) }}</h4>
                                                </td>
                                            </tr>

                                            <tr class="odd">
                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ __('translate.Crated at') }}</h4>
                                                </td>


                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">
                                                        {{ $withdraw->created_at->format('d F Y') }}
                                                    </h4>
                                                </td>

                                            </tr>

                                            <tr class="odd">
                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ __('translate.Withdraw Method') }}</h4>
                                                </td>

                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">
                                                        {{ $withdraw->withdraw_method_name }}
                                                    </h4>
                                                </td>

                                            </tr>


                                            <tr class="odd">
                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ __('translate.Bank/Account Info') }}</h4>
                                                </td>

                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{!! clean(nl2br(html_decode($withdraw->description))) !!}</h4>
                                                </td>
                                            </tr>

                                            <tr class="odd">
                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    <h4 class="crancy-table__product-title">{{ __('translate.Status') }}</h4>
                                                </td>

                                                <td class="crancy-table__column-2 crancy-table__data-2">
                                                    @if ($withdraw->status == 'approved')
                                                        <div class="crancy-table__status crancy-table__status--paid">{{ __('translate.Approved') }}</div>
                                                    @elseif ($withdraw->status == 'rejected')
                                                        <div class="crancy-table__status crancy-table__status--delete">{{ __('translate.Rejected') }}</div>
                                                    @else
                                                        <div class="crancy-table__status crancy-table__status--unpaid">{{ __('translate.Pending') }}</div>
                                                    @endif
                                                </td>
                                            </tr>

                                        </tbody>
                                        <!-- End crancy Table Body -->
                                    </table>
                                </div>
                                <!-- End crancy Table -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End crancy Dashboard -->

@endsection


