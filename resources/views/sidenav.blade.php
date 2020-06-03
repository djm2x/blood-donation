
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


<section class="sidenav">
    <section class="news pb-2">
        <div class="card w-100" style="border-radius: 0; height: 50vh">
            <div class="card-body">
                <h5 class="card-title">Test</h5>
                <h6 class="card-subtitle mb-2" style="width: 30%">
                    <hr class="m-0">
                    <hr class="m-0">
                    <hr class="m-0">
                </h6>
                <div id="newsTopThree" class="d-flex flex-column justify-content-between align-items-center">

                </div>
            </div>
        </div>
    </section>
</section>
@section('scripts-sidenav')
<script>
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
