<!DOCTYPE html>
<html class="html yes-js js_active js" dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!---->
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400..700&display=swap" rel="stylesheet">
    
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/aawtar.jpg') }}">
</head>
<body>
     @include('awtar.footerAndNav.nav') 
     <section class="login">
      
            @if($errors->any())
                  <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        {{$error}}
                        @break
                        @endforeach
                  </div>
            @endif
            <div class="d-flex align-items-center login-container flex-column">
                 <h1 class="login-text">أنشاء حساب</h1>
                 <br>
                 <div class="login-form">
                    <form method="POST" action='{{ env('APP_URL') }}register'>
                          @csrf
                          <div class="user-name">
                                <div class="d-flex text">
                                    <p class="p-login">أسم المستخدم</p class="circle"><p class="circle">.</p>
                                </div>
                                <input  type="text" name="name" :value="old('name')" class="em-pas-input" required autofocus/>
                          </div>
                          <div class="passowrd-text">
                                <div class="d-flex text">
                                    <p class="p-login">أسم المستخدم أو البريد الالكتروني</p class="circle"><p class="circle">.</p>
                                </div>
                                <input  type="email" name="email" :value="old('email')" class="em-pas-input" required/>
                          </div>
                          <div class="passowrd-text">
                                <div class="d-flex text">
                                   <p class="p-login">كلمة المرور </p><p class="circle">.</p>
                                </div>
                                <input type="password" name="password" class="em-pas-input" required/>
                          </div>
                          <div class="passowrd-text">
                                 <div class="d-flex text">
                                    <p class="p-login">تأكيد كلمة المرور </p><p class="circle">.</p>
                                 </div>
                                 <input type="password" name="password_confirmation" class="em-pas-input" required/>
                          </div>
                          <div class="submit-with-remember">
                                <input type="submit" value="أنشاء" class="submit"/>
                                <div class="no-thing"></div>
                          </div>
                    </form>
                 </div>
            </div>
     </section>

     @include('awtar.footerAndNav.footer')
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>