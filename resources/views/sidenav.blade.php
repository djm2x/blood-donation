
 <style>
    .date {
        position: relative;
    }

    .date::before {
        content: '';
        background-image: url('images/dashed.png');
        position: absolute;
        height: 100%;
        width: 100%;
        z-index: -1;
    }

    .init-ancre {
        color: #000000;
        text-decoration: none;
        /* background-color: transparent; */
    }
    .init-ancre:hover {
        color: #000000;
        text-decoration: none;
    }
 </style>


<section class="sidenav h-100">
    <section class="news pb-2">
        <div class="card w-100" style="border-radius: 0">
            <div class="card-body">
                <a href="/actualites" class="text-dark">
                    <h5 class="card-title">@lang('menu.Actualite')</h5>
                </a>
                <h6 class="card-subtitle mb-2" style="width: 30%">
                    <hr class="m-0">
                    <hr class="m-0">
                    <hr class="m-0">
                </h6>
                <div class="d-flex flex-column" id="news" class="row pl-2">
                    
                </div>
            </div>
        </div>
    </section>
    <section class="news pb-2">
        <div class="card w-100" style="border-radius: 0; height: 45vh;">
            <div class="card-body">
                <a href="/actualites" class="text-dark">
                    <h5 class="card-title">Test</h5>
                </a>
                <h6 class="card-subtitle mb-2" style="width: 30%">
                    <hr class="m-0">
                    <hr class="m-0">
                    <hr class="m-0">
                </h6>
                <div class="d-flex flex-column" id="news" class="row pl-2">
                    
                </div>
                
            </div>
        </div>
    </section>
</section>
@section('scripts-sidenav')
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
                const r = await axios.get(`/api/actualites/news/5`);
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
                    `<div class="mb-3">
                        <a href="/actualites/${e.id}" class="text-dark">
                            <p style="font-size: 1.1em" class=" m-0">${e.title}</p>
                        </a>
                        <p class="text-muted m-0" style="font-size: .9em">
                            <i class="far fa-calendar-alt"></i> ${dateFormat(new Date(e.date))}
                        </p>
                        
                    </div>
                    `;

                    // <p class="text-muted m-0 mb-3" style="font-size: .6em">
                    //         ${e.description.toString().substring(0, 500)} ...
                    //         ${new DOMParser().parseFromString(e.description, "text/html")} ...
                    //     </p>
            });

            return html;
        }

        function dateFormat(date) {
            let month = `${date.getMonth() + 1}`
            let day = `${date.getDate()}`
            let year = `${date.getFullYear()}`

            month = `${month.length === 1 ? '0' + month : month}`;
            day = `${day.length === 1 ? '0' + day : day}`;

            return `${day}/${month}/${year}`;
        }

        /**
         * @returns {ParentNode} element
         */
        function get(selector) {
            return document.querySelector(selector)
        }   
    // const spinner = `<div class="spinner-border text-success m-5" role="status">
    //                     <span class="sr-only">Loading...</span>
    //                 </div>`;

    // window.addEventListener("DOMContentLoaded", () => {
    //     console.log('DOMContentLoaded')
    //     getPage('newsTopThree', 'news');
    //     getPage('agendaTopThree', 'agenda');
    // });

    // async function getPage(context, type) {
    //     get(`#${context}`).innerHTML = spinner;

    //     try {
    //         const r = await axios.get(`/api/blog/${context}`);
    //         const list = r.data.list;

    //         console.log(list)

    //         if (list) {
    //             get(`#${context}`).innerHTML = '';
    //             get(`#${context}`).innerHTML = populate(list, type);
    //         }

    //     } catch (e) {
    //         // try {
    //         //     e.response?.data ? console.warn(e.response?.data) : console.warn(e);
    //         // } catch (error) {
    //         // }
    //         console.warn(e)

    //     }
    // }

    // /**
    //  * @param {date: Date, titre: string}[] data
    //  * @returns {void}
    //  */
    // function populate(data, type) {
    //     let html = ''
    //     data.forEach((e, i) => {
    //         html +=
    //             `<div class="d-flex align-items-center w-100 p-1">
    //                 <div class="col-3 col-md-3 date d-flex flex-column justify-content-between align-items-center">
    //                     <p class="h3 m-0 font-weight-bold" style="z-index: 3;">${new Date(e.date).getDate()}</p>
    //                     <p class="m-0 text-muted" style="z-index: 3; font-size:.8em; white-space: nowrap;">
    //                         ${new Date(e.date).toLocaleString('default', { month: 'long' })}, ${new Date(e.date).getFullYear()}
    //                     </p>
    //                 </div>
    //                 <div class="col-9 col-md-9 pr-0">
    //                     <a class="init-ancre" href="/blogs/${type}/${e.id}""><p class="m-0">${e.title.substring(0, 60)}..</p></a>
    //                 </div>
    //             </div>
    //             `;
    //     });

    //     return html;
    // }

    // /**
    //  * @returns {ParentNode} element
    //  */
    // function get(selector) {
    //     return document.querySelector(selector)
    // }
</script>
@stop
