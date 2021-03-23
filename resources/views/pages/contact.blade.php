@extends('layouts.base')

@section('content-base')

    @include('components.contact', ["title" => "Contact Us"])


    <div class="section">
      <div class="content-box h-100 w-95 p-4 m-4">
        <div class="section__contact-form">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-lg-4 offset-lg-2 mb-4 mb-md-0">
                <div class="contact__content">
                  <p>Anda malu bertanya, Anda sesat dijalan.</p>
                  <div class="mb-3">
                    <label class="contact__label">Need help?</label>
                    <div class="mb-2"><i class="fas fa-at icon--left"></i> <a href=" ">14080</a></div>
                    <div>
                      <i class="fas fa-map-marker-alt icon--left d-inline-block" style="margin-top: 0.2rem; float:left;"></i> 
                      <p class="d-inline-block">Terima Kasih Atas Pemberitahuannya<br>Semoga Selamat Sampai Tujuan</p>                  
                    </div>
                  </div>
                  <label class="contact__label">Follow us on:</label>
                  <div class="social-links">
                    <a href=" " class="btn-icon"><i class="fab fa-facebook-f" ><img src="{{ asset('assets/images/facebook-removebg-preview.png') }}" alt="image" height="30" width="30"></i></a>
                    <a href=" " class="btn-icon"><i class="fab fa-twitter">><img src="{{ asset('assets/images/twitter-removebg-preview.png') }}" alt="image" height="30" width="30"></i></a>
                    <a href=" " class="btn-icon"><i class="fab fa-instagram"><img src="{{ asset('assets/images/instagram-removebg-preview.png') }}" alt="image" height="30" width="30"></i></a>
                    <a href=" " class="btn-icon"><i class="fab fa-youtube"><img src="{{ asset('assets/images/youtube-removebg-preview.png') }}" alt="image" height="30" width="30"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <form action="" method="POST">
                  <input type="hidden" name="_token" value="j71KZaLXltQrKDP1wGvKwN9wVdPtSElSVWcQm8Un">

                  
                  <div class="form-group mb-3">
                    <label class="form__label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your name" value="">
                  </div>

                  <div class="form-group mb-3">
                    <label class="form__label">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Your email" value="">
                  </div>

                  <div class="form-group mb-3">
                    <label class="form__label">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Your phone number" value="">
                  </div>

                  <div class="form-group mb-3">
                    <label class="form__label">Subject</label>
                    <select class="form-control" name="subject">
                        <option value="">-- Choose Subject --</option>
                                          <option value="1">Contact Us</option>
                                      </select>
                  </div>

                  <div class="form-group mb-3">
                    <label class="form__label">Message</label>
                    <textarea name="message" class="form-control" placeholder="Your message" rows="5"></textarea>
                  </div>

                  <button type="submit" class="mli-btn mli-btn--primary btn-block" >Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>

@stop