<template>
  <main-layout>
  <div>
      <form action="/api/order.php" method="post" id="order-form" novalidate="" v-on:submit.prevent="purchase">
          <h2>Only $17!</h2>
          <h3>Whip out your credit card, type in those numbers, and we'll put you a <em>schpicy</em> bird in the fryer.</h3>

          <div>
              <div ref="card"></div>
              <button type="submit" name="purchase">Order Now</button>
          </div>
      </form>
  </div>
  </main-layout>
</template>

<script>
  import MainLayout from '../layouts/Main.vue'

  let stripe = Stripe('pk_test_hErI8ag60ANyJRvGStT1Ea2P'),
    elements = stripe.elements(),
    card = undefined;

  export default {
    components: {
      MainLayout
    },
    mounted: function () {
      card = elements.create('card');
      card.mount(this.$refs.card);
    },
    methods: {
      purchase: function () {
        let self = this;

        stripe.createToken(card).then(function(result) {
          if (result.error) {
            self.hasCardErrors = true;
            self.$forceUpdate();
            return;
          }

          var form = document.getElementById('order-form');
          var hiddenInput = document.createElement('input');
          hiddenInput.setAttribute('type', 'hidden');
          hiddenInput.setAttribute('name', 'stripeToken');
          hiddenInput.setAttribute('value', result.token.id);
          form.appendChild(hiddenInput);
          form.submit();
        });
      }
    }
  }

</script>
