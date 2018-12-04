@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="contact-section spad fix" id='contact'>
    <div class="container">
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contact us</h2>
                </div>
                <p>{{$compagnie[0]->description}}</p>
                <h3 class="mt60">Main Office</h3>
                <p class="con-item">{{$compagnie[0]->lieux}}</p>
                <p class="con-item">{{$compagnie[0]->numero}}</p>
                <p class="con-item">{{$compagnie[0]->email}}</p>
            </div>
            <!-- contact form -->
            <div class="col-md-6 col-pull">
                <form action="/sendMail" method="POST" class="form-class" id="con_form">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="Your name">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="Your email">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
