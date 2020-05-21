let count = 0;
let pageIndex = 0;
let endIndex = 0;

let idRegion = 0;
let dateOrderDir = 'desc';

const spinner = `
        <div class="spinner-border text-success m-5" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        `;

window.addEventListener("DOMContentLoaded", () => getPage(pageIndex, +get('#pageSize').value, idRegion, dateOrderDir));

get('#regionSelect').addEventListener('change', (e) => {
    pageIndex = 0;
    getPage(pageIndex, +get('#pageSize').value, +e.target.value, dateOrderDir);
});

get('#dateSelect').addEventListener('change', (e) => {
    pageIndex = 0;
    getPage(pageIndex, +get('#pageSize').value, idRegion, e.target.value);
});

// pagination
get('#pageSize').addEventListener('change', () => getPage(pageIndex, +get('#pageSize').value, idRegion, dateOrderDir));

get('#first').addEventListener('click', () => {
    if (pageIndex === 0) return;

    pageIndex = 0;
    getPage(0, +get('#pageSize').value, idRegion, dateOrderDir);
});

get('#previous').addEventListener('click', () => {
    if (pageIndex === 0) return;

    pageIndex--;
    getPage(pageIndex, +get('#pageSize').value, idRegion, dateOrderDir);
});

get('#next').addEventListener('click', () => {
    if (count === endIndex) return;

    pageIndex++;
    getPage(pageIndex, +get('#pageSize').value, idRegion, dateOrderDir);
});

get('#last').addEventListener('click', () => {
    if (count === endIndex) return;

    pageIndex = parseInt(count / +get('#pageSize').value);
    getPage(pageIndex, +get('#pageSize').value, idRegion, dateOrderDir);
});


async function getPage(pageIndex, pageSize, idRegion, dateOrderDir) {
    const startIndex = pageIndex * pageSize;
    get('#list').innerHTML = spinner;

    try {
        const r = await axios.get(`/api/activites/listApi/${startIndex}/${pageSize}/${idRegion}/${dateOrderDir}`);
        const list = r.data.list;
        count = r.data.count;
        endIndex = (startIndex + pageSize > count) ? (count) : (startIndex + pageSize);

        get('#count').innerHTML = count;
        get('#startIndex').innerHTML = startIndex + 1;
        get('#endIndex').innerHTML = endIndex;

        if (list) {
            populate(list);
        }

    } catch (e) {
        e.response?.data ? console.warn(e.response?.data) : console.warn(e);
    }
}


/**
 * @param {Array} data
 * @returns {void}
 */
function populate(data) {
    list.innerHTML = '';
    data.forEach((e, i) => {
        list.innerHTML +=
            `
                    <div class=" mb-3 justify-content-center align-items-center">
                        <div class="card m-1" style="width: 18rem;">
                            <img src="activites/${e.imageUrl.replace(';', '')}" onerror="this.onerror=null;this.src='images/verts.png';" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text m-0 text-dark font-weight-bold">${e.title}</p>
                                <p class="card-text m-0 text-dark text-muted">
                                    ${e.description.substring(0, 50)} ...
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <a class="btn btn-danger text-uppercase"  href="activite/${e.id}">plus d'info...</a>
                                    <div class="d-flex text-dark social"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
    });
}
/**
 * @returns {ParentNode} element
 */

function get(selector) {
    return document.querySelector(selector)
}
