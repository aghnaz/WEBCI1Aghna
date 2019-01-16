<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Galery</title>
        <style>
            .   h1{
                margin-bottom: 51px;
                font-size: 40px;
                margin-top: 35px;
            }
            .grid{
                display: grid;
                grid-template-columns: 1fr 1fr;
                width: 100%;
            }
            img{
                padding: 0;
                
            }
            #k2 img{
                
            }
        </style>
    </head>
    <body style="margin: 52px; font-family: 'Century Gothic', sans-serif; background-color:
        #ededed; text-align: center;">
        <h1 class="judul">Koleksi Honda Indonesia Motor Club</h1>
        <div class="grid">
            <div id="k1">
                <img style="width: 400px; " src="<?=base_url()?>assets/gambar/CB150 Verza.png" alt="">
                <!-- <p style="margin-top: -199px; margin-left: 291px;">America Style</p> -->
                <p style="margin-left:160px;">America Style</p> <br>
                <img style="width: 400px;  margin-top: 10px;" src="<?=base_url()?>assets/gambar/CB150R.png" alt="">
                <!-- <p style="margin-top: -224px; margin-left: 319px;">Stripe Blue</p> -->
                <p style="margin-left:160px;">Stipe Red</p>
            </div>
            <div id="k2">
                <img style="width: 400px; " src="<?=base_url()?>assets/gambar/CRF250RALLY.png" alt="">
                <!-- <p style="margin-top: -215px; margin-left: 291px;">Donker Blue</p> -->
                <p style="margin-left:160px;">Red Mamba</p> <br>
                <img style="width: 400px; margin-top: 10px;" src="<?=base_url()?>assets/gambar/CBR250RR.png" alt="">
                <!-- <p style="margin-top: -226px; margin-left: 319px;">Blue Mamba</p> -->
                <p style=" margin-left:160px;">Maroon Red</p>
            </div>
        </div>
    </body>
</html>