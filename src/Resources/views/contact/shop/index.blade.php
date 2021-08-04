@extends('shop::layouts.master')

@section('page_title')
    {{ __('contact_lang::app.shop.title') }}
@endsection

@section('content-wrapper')
    <div class="auth-content form-container">
        <div class="container">
            <div class="col-lg-8 col-md-12 offset-lg-2">
                {{-- <div class="heading">
                    <h2 class="fs24 fw6">
                        {{ __('contact_lang::app.shop.title') }}
                    </h2>
                </div> --}}

                <div class="body col-12">
                    <h3 class="fw6">
                        Contact with us
                    </h3>

                    <p class="fs16">
                        If you want to know something, just send us a message, we glad to hear from you.
                    </p>

                    <form class="cd-form floating-labels" action="{{ route('shop.contact.send-message') }}" method="post">
                        {{ csrf_field() }}
                          <div class="form-group">
                             <label class="cd-label " for="cd-name">Name</label>
                             <input class="text-input form-style" type="text" name="name" id="cd-name" required>
                          </div> 

                          <div class="form-group">
                             <label class="cd-label" for="cd-email">Email</label>
                             <input class="text-input  form-style" type="email" name="email" id="cd-email" required>
                          </div> 

                          {{-- <div class="form-group">
                             <label class="cd-label" for="cd-mobile">Phone Number</label>
                             <input class="text-input  form-style" type="number" name="phone" id="cd-mobile" required>
                          </div>  --}}

                          <div class="form-group">
                             <label class="cd-label" for="cd-textarea">Message</label>
                             <textarea class="message  form-control" name="message_body" rows="5" id="cd-textarea" required></textarea>
                          </div>

                          <div>
                             <button type="submit" class="theme-btn btn-block p-3"><i class="fa fa-paper-plane"></i> Send Message</button>
                          </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection