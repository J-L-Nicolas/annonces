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

/* event clik detail(more) annonce */
$('.cust-clikmore').on('click', (e) =>{

    $('#detailAnnonce').css('display', 'block');
    let sendId = e.target.id
   
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let annonceDetail = JSON.parse(this.responseText)[0];
            console.log(annonceDetail);
            $('#detail-more-name').text(annonceDetail['nameAnnonce']);
            $('#detail-more-more').text(annonceDetail['moreAnnonce']);
            $('#detail-more-price').text(annonceDetail['priceAnnonce']+'€');
            if(annonceDetail['pictureAnnonce'] != ''){
                $('#detail-more-img').attr('src', "/assets/images/annonce/cover/" + annonceDetail['pictureAnnonce']);
            }
            else{
                $('#detail-more-img').attr('src', '/assets/images/not-available.jpg');
            }
        }
    };
    xhttp.open("POST", "/ApiAnnonces");
    xhttp.setRequestHeader("Content-Type", "application/json;charset=UTF-8");

    let data = JSON.stringify({ "id": sendId})
    xhttp.send(data);

})

/* closse detail(more) */
$('.close_mor').on('click', (e) =>{
    $('#detailAnnonce').css('display', 'none');
})

