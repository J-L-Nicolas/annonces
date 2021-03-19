/* prevusialiser une image dans un input */
$('#inputGroupFile01').on('change', (e) => {
    let that = e.currentTarget
        if (that.files && that.files[0]) {
            $('#name-picture').html(that.files[0].name);
            let reader = new FileReader()
            reader.onload = (e) => {
                $('#preview').attr('src', e.target.result)
            }
            reader.readAsDataURL(that.files[0])
        }
})

/* filtre and reload category */
document.querySelector('#categorySelected').addEventListener('change',(e)=>{
    console.log('ok change category' );
    document.querySelector('#formcategory').submit();
})

/* event clik open detail(more) annonce */
$('.cust-clikmore').on('click', (e) =>{
    let sendId = e.target.id
    
    rederDom(sendId);
})

/* closse detail(more) */
$('.close_mor').on('click', (e) =>{
    $('#detailAnnonce').css('display', 'none');
})
/* **************** Functions ******************* */

function directRequestApi(url, methode, data){
    let xhttp = new XMLHttpRequest();
    
    xhttp.open(methode, url);
    xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
    xhttp.send(JSON.stringify(data));
    return new Promise(resolve => {
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                resolve(JSON.parse(this.responseText));
                
            }
        };
    });
}


/* rendu du popup detail an lien avec la requet ajax */
async function rederDom(sendId){

    let data = {"id": sendId};
    let annonceDetail = await directRequestApi("/ApiAnnonces", "POST", data)
    $('#detailAnnonce').css('display', 'block'); /* afficher popup */
    if (annonceDetail != undefined){
        annonceDetail = annonceDetail[0];
        let userlist = await directRequestApi("/ApiAnnonces/vendeur", "POST", {"id": annonceDetail['idUserAnnonce']})
        /* render DOM */
            $('#detail-more-name').text(annonceDetail['nameAnnonce']);
            $('#detail-more-vendeur').text(userlist[0]['nameUser']);
            $('#detail-more-more').text(annonceDetail['moreAnnonce']);
            $('#detail-more-price').text(annonceDetail['priceAnnonce']+'€');
            if(annonceDetail['pictureAnnonce'] != ''){
                $('#detail-more-img').attr('src', "/assets/images/annonce/cover/" + annonceDetail['pictureAnnonce']);
            }
            else{
                $('#detail-more-img').attr('src', '/assets/images/not-available.jpg');
            }
        /* en render DOM */
    }
}


