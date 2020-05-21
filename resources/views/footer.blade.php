<section class="footer p-5">
    <div class="container">


    <div class="row text-left">
        <div class="col-md-3 mt-5">
            <img class="mb-2" height="80" src="/images/icon.jpg" width="80" />
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam</p>
            <a class="font-weight-bold text-white" href="/">En savoir plus sur nous</a>
        </div>

        <div class="col-md-3 mt-5 images">
            <h5 class="font-weight-bold" style="color: white;">A LA UNE</h5>

            <div class="row">
                <a href="#">
                    <img alt="" src="/images/f1.jpg"/>
                </a>
                <a href="#">
                    <img alt="" src="/images/f2.jpg"/>
                </a>
            </div>

            <div class="row">
                <a href="#">
                    <img alt="" src="/images/f3.jpg"/>
                </a>
                <a href="#">
                    <img alt="" src="/images/f4.jpg"/>
                </a>
            </div>
        </div>

        <div class="col-md-3 mt-5">
            <h5 class="font-weight-bold text-white">NOUS CONTACTER</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. Ut enim ad minim veniam</p>
            <p style="margin: 0;"><i class="fas fa-map-marker-alt"></i>  quelque hasard adresse</p>
            <p style="margin: 0;"><i class="fas fa-mobile-alt"></i>  02020202</p>
            <p style="margin: 0;"><i class="fas fa-envelope"></i>  email@angular.io</p>
            <!-- <i class="fa fa-map-marker" aria-hidden="true"></i>  -->
        </div>

        <div class="col-md-3 mt-5">
            <h5 class="font-weight-bold text-white">NEWSLETTER</h5>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, dolore magna aliqua. Ut enim ad minim veniam</p>

            <form id="newletterForm" class="form-inline">
                <div class="input-group mb-2">
                    {{-- <div class="input-group-prepend">
                      <div class="input-group-text">@</div>
                    </div> --}}
                    <input type="email" class="form-control" id="newletterEmail" placeholder="Email">
                    <div class="input-group-prepend">
                        <button type="submit" class="btn btn-success mb-2 text-uppercase" style="border-radius: 0 5px 5px 0">subscribe</button>
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
        <span>&copy; 2020 Centre national de transfusion Sanguine, Tout droit réserver</span>

        <div class="d-flex flex-wrap align-items-center actions">
            <a class="m-1" href="#">Montions légales</a>
            <a class="m-1" href="#">Publications</a>
            <a class="m-1" href="#">A la une</a>
            <a class="m-1" href="#">Plan du site</a>
            <a class="m-1" href="#">Contact</a>
        </div>
    </div>

</section>



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

