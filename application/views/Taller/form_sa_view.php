<script>
    $(function(){

        const edicion = <?php echo $edicion ?>;
        let mensaje = '';
        if (edicion>0) {
            switch (edicion) {
                case 1:
                    mensaje = "Taller agregado";
                    break;
                case 2:
                    mensaje = "Taller eliminado";
                    break;
            }
            //alert(edicion);
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: mensaje,
            showConfirmButton: false,
            timer: 1500
            })
        }


    });
</script>
