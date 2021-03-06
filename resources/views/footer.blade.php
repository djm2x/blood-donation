<section class="footer">
    <div class="container">


    <div class="{{ app()->getLocale() == 'fr' ? 'row text-left' : 'row text-right' }}">
        <div class="col-md-4 mt-5">
            <a href="/">
                <img class="mb-2" height="80" src="/images/icon.jpg" width="80" />
            </a>
            <p>@lang('footer.EnsavoirplussurnousText')</p>
            <a class="font-weight-bold text-white" href="/cntsh/missions">@lang('footer.Ensavoirplussurnous')</a>
        </div>

       

        <div class="col-md-4 mt-5 ">
            <a href="/contact" class="pl-0">
                <h5 class="font-weight-bold text-white text-uppercase">@lang('footer.nouscontacter')</h5>
            </a>

            {{-- <p>@lang('footer.nouscontacterText')</p> --}}
            <p style="margin: 0;"><i class="fas fa-map-marker-alt"></i> 472, rue Mfadel Cherkaoui, q. Al Irfane RABAT</p>
            <p style="margin: 0;"><i class="fas fa-mobile-alt"></i> 05 37 77 49 93</p>
            <p style="margin: 0;"><i class="fas fa-envelope"></i> email@angular.io</p>
            <!-- <i class="fa fa-map-marker" aria-hidden="true"></i>  -->
        </div>

        <div class="col-md-4 mt-5">
            <h5 class="font-weight-bold text-white text-uppercase">@lang('footer.newsletter')</h5>

            <p>@lang('footer.newsletterText')</p>

            <form id="newletterForm" class="form-inline">
                <div class="input-group mb-2"  style="direction: ltr">
                    <input type="email" class="form-control" id="newletterEmail" placeholder="@lang('footer.email')">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-success mb-2 text-uppercase" style="border-radius: 0 5px 5px 0;">
                            @lang('footer.subscribe')
                        </button>
                    </div>
                </div>
            </form>
            <span id="msg"></span>
        </div>
    </div>
</div>
</section>

<section class="d-flex justify-content-between align-items-center last">
    <div class="container d-flex flex-wrap justify-content-between align-items-center p-2">
        <span>&copy; @lang('footer.2020CentrenationaldetransfusionSanguineToutdroitreserver')</span>

        <div class="d-flex flex-wrap align-items-center actions">
            <a class="m-1" href="#">@lang('footer.Montionslegales')</a>
            <a class="m-1" href="#">@lang('footer.Publications')</a>
            <a class="m-1" href="#">@lang('footer.Alaune')</a>
            <a class="m-1" href="#">@lang('footer.Plandusite')</a>
            <a class="m-1" href="#">@lang('footer.Contact')</a>
        </div>
    </div>

</section>

@section('scripts-footer')

    <script>
         
        const newletterForm = document.getElementById('newletterForm');
        const msg = document.getElementById('msg');

        newletterForm.addEventListener('submit', async e => {

            e.preventDefault();

            const o = {
                email: document.getElementById('newletterEmail').value,
                date: new Date(),
            }

            console.log(o);

            try {
                msg.innerHTML = "en cours d'envois ...";
                const r = await axios.post('/api/newsLetter', o);
                console.log(r);
                msg.innerHTML = "Email enregister";

                setTimeout(() => msg.innerHTML = '', 4000);

            } catch (e) {
                e.response ? console.warn(e.response.data) : console.warn(e);
            }
        });

        
    </script>

@stop