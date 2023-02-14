<?php 


?>
<script>
    const desteklenenOdemeYontemleri = [{
        supportedMethods: ['basic-card']
    }];
    const odemeDetaylari = {
        total: {
            label: 'Toplam',
            amount: {
                currency: 'TRY',
                value: 100
            }
        }
    };
    const request = new PaymentRequest(desteklenenOdemeYontemleri, odemeDetaylari);
    async function satinAl() {
        // Ödeme ekranını göster ve ilgili ödeme bilgilerinin doldurulmasını bekle
        const paymentResponse = await request.show();
        // Ödemeyi tamamla
        await paymentResponse.complete();
        // Ödeme bilgilerini bankaya ilet 
        console.log(paymentResponse.details); // CC #, ad, güvenlik kodu, son kullanım tarihi vb.
    }
</script>