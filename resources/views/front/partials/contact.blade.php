@section('css')
    <link rel="stylesheet" href="{{asset('toast/dist/jquery.toast.min.css')}}">
@endsection
<div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start  contact -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form contact-form">
                        <form action="{{route('contact.ajax')}}" id="form" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="fullName" class="form-control" id="fullName" placeholder="Your fullName"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success" id="submit" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Left contact -->
            </div>
        </div>
    </div>
</div>
@section('js')
    <script src="{{asset('toast/dist/jquery.toast.min.js')}}"></script>
    <script>
        $('#form').submit(function (e) {
            e.preventDefault();
            let token=$('input[name=_token]').val();
            let fullName=$('input[name=fullName]').val();
            let email=$('input[name=email]').val();
            let subject=$('input[name=subject]').val();
            let message=$('textarea[name=message]').val();
            let action=$('#form').attr('action');
            $.ajax({
                url:action,
                type:"Post",
                data:{
                    _token:token,
                    fullName:fullName,
                    email:email,
                    subject:subject,
                    message:message
                },
                success:function (data) {
                    if (data==1){
                        $.toast({
                            heading: 'Success',
                            text: 'thank you! registered.',
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-center'
                        })
                        $('input[name=fullName]').val('');
                        $('input[name=email]').val('');
                        $('input[name=subject]').val('');
                        $('textarea[name=message]').val('');
                    }
                }
            })
        })
    </script>
@endsection
