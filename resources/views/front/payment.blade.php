@extends('layout.main')
@section('title', 'payment')
@section('content')

<div class="row  ">
        <div class="col-md-6 col-md-offset-3" >
        <form action="{{route('checkout.payment')}}" method="POST" id="payment-form">
            {{csrf_field()}}
            <span class="payment-errors"></span>

            <div class="form-group">
                <label>
                    <span>Card Number</span>
                    <input type="text" size="20" required data-stripe="number">
                </label>
            </div>

            <div class="form-group">
                <label>
                    <span>Expiration (MM/YY)</span>
                    <input type="text" size="2" required data-stripe="exp_month">
                    <span> / </span>
                    <input type="text" size="2" data-stripe="exp_year">
                </label>
            </div>

            <div class="form-group">
                <label>
                    <span>CVC</span>
                    <input type="text" size="4" required data-stripe="cvc">
                </label>
            </div>


            <input type="submit" class="btn btn-success" value="Submit Payment">
        </form>
        </div>
</div>



@endsection