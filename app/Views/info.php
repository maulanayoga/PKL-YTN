<?= $this->extend('Layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    div.container {
                    margin-top : 30px;
                    padding-bottom : 30px;
    
                 }
    .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
               
            }
</style>

<div class="container">


              <div class="card" style="padding : 10PX">
              <img src="<?= base_url('assets/images/fotodepantoko.jpg') ?>" class="center" style = "width:50%"  >
                <p style = "text-align :justify">Toko Bunga Edelweisflorist01 bergabung dengan bisnis online dan 
                    memiliki akun instagram sejak tanggal 27 Juni 2016 
                    dengan lokasi pengiriman dari Surabaya - Jawa Timur. 
                    Terbentuknya toko edelweisflorist01 sendiri dari owner 
                    yang menyukai tentang bunga sehingga tertarik untuk berbisnis 
                    dalam bidang tersebut.</p>
                <p> No. Telepon : +62 895 0539 0708 <p>
                <p> Instagram : <a href="https://www.instagram.com/edelweisflorist01/" target="_blank">@edelweisflorist01</i></a> <p>

                <p>Lokasi Toko :</p>
                <p>Jl. Mejoyo No.11, Kali Rungkut, Kec. Rungkut, Kota SBY, Jawa Timur 60293</p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.33067525080145!2d112.76924537107746!3d-7.321195725685249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf9f8557c8f%3A0xb168d1699cf58ee1!2sEdelweis%20Florist!5e0!3m2!1sid!2sid!4v1610605924790!5m2!1sid!2sid" 
                 class = "center" width="800" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

<?= $this->endSection(); ?>
