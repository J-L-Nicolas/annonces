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