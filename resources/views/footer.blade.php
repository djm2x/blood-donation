<section class="footer">
    <div class="container">


    <div class="{{ app()->getLocale() == 'fr' ? 'row text-left' : 'row text-right' }}">
        <div class="col-md-3 mt-5">
            <img class="mb-2" height="80" src="/images/icon.jpg" width="80" />
            <p>@lang('footer.EnsavoirplussurnousText')</p>
            <a class="font-weight-bold text-white" href="/">@lang('footer.Ensavoirplussurnous')</a>
        </div>

        <div class="col-md-3 mt-5 images">
            <h5 class="font-weight-bold text-uppercase" style="color: white;">@lang('footer.alaune')</h5>

            <div id="news" class="row">
                {{-- <a href="#" class="col-md-6 p-0">
                    <img alt="" src="/images/f1.jpg"/>
                </a>
                <a href="#" class="col-md-6 p-0">
                    <img alt="" src="/images/f2.jpg"/>
                </a>
            
                <a href="#" class="col-md-6 p-0">
                    <img alt="" src="/images/f3.jpg"/>
                </a>
                <a href="#" class="col-md-6 p-0">
                    <img alt="" src="/images/f4.jpg"/>
                </a> --}}
            </div>
        </div>

        <div class="col-md-3 mt-5 ">
            <h5 class="font-weight-bold text-white text-uppercase">@lang('footer.nouscontacter')</h5>
            <p>@lang('footer.nouscontacterText')</p>
            <p style="margin: 0;"><i class="fas fa-map-marker-alt"></i>  quelque hasard adresse</p>
            <p style="margin: 0;"><i class="fas fa-mobile-alt"></i>  02020202</p>
            <p style="margin: 0;"><i class="fas fa-envelope"></i>  email@angular.io</p>
            <!-- <i class="fa fa-map-marker" aria-hidden="true"></i>  -->
        </div>

        <div class="col-md-3 mt-5">
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
        //
        const spinner2 = `<div class="2-border text-success m-5" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>`;

        window.addEventListener("DOMContentLoaded", () => {
            console.log('DOMContentLoaded')
            getPage();
        });

        async function getPage() {
            get(`#news`).innerHTML = spinner2;

            try {
                const r = await axios.get(`/api/actualites/news/4`);
                const list = r.data.list;

                console.log('fouter>>>')
                console.log(r)
                console.log('fouter<<<<')

                if (list) {
                    get(`#news`).innerHTML = '';
                    get(`#news`).innerHTML = populate2(list);
                }

            } catch (e) {
                // try {
                //     e.response?.data ? console.warn(e.response?.data) : console.warn(e);
                // } catch (error) {
                // }
                console.warn(e)

            }
        }
                                                            
        /**
         * @param {date: Date, titre: string}[] data
         * @returns {void}
         */
        function populate2(data) {
            let html = ''
            data.forEach((e, i) => {
                html +=
                    `<a href="/actualites/${e.id}" class="col-md-6 p-0">
                        <img src="actualites/${e.imageUrl?.replace(';', '')}" onerror="this.onerror=null;this.src='/images/404.png';" class="w-100">
                    </a>`;
            });

            return html;
        }

        /**
         * @returns {ParentNode} element
         */
        function get(selector) {
            return document.querySelector(selector)
        }    
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