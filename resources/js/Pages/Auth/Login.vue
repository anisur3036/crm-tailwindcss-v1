<template>
  <div class="flex justify-center items-center h-screen">
    <div class="w-full max-w-xs">
      <div class="p-2 md:p-4 flex items-center justify-center">
        <img
          class="h-12 md:h-16 object-cover object-center"
          src="/img/SKCL-Logo.png"
          alt="SKCL"
        />
      </div>
      <form
        @submit.prevent="submit"
        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
      >
        <div class="mb-4 md:mb-8">
          <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            Email
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            v-model="form.email"
            :error="errors.email"
            id="email"
            type="email"
            autofocus
            autocapitalize="off"
          />
        </div>
        <div class="mb-4 md:mb-8">
          <label
            class="block text-gray-700 text-sm font-bold mb-2"
            for="password"
          >
            Password
          </label>
          <input
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
            id="password"
            type="password"
            placeholder="******************"
            v-model="form.password"
          />
          <p class="text-red-500 text-xs italic">Please choose a password.</p>
        </div>
        <div class="flex items-center justify-start">
          <input
            class="form-check-input"
            type="checkbox"
            name="remember"
            id="remember"
            v-model="form.remember"
          />
          <div class="ml-2 flex items-center justify-between">
            <label class="form-check-label" for="remember">
              Remember Me
            </label>
          </div>
        </div>
        <div class="mt-2 md:mt-4 flex items-center justify-between">
          <loading-button :loading="sending" class="btn-indigo" type="submit"
            >Login</loading-button
          >
          <a
            class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
            href="#"
          >
            Forgot Password?
          </a>
        </div>
      </form>
      <p class="text-center text-gray-500 text-xs">
        &copy;2020 SKCL. All rights reserved.
      </p>
    </div>
  </div>
</template>

<script>
import LoadingButton from '@/Shared/LoadingButton';
// import Logo from '@/Shared/Icon'

export default {
  metaInfo: { title: 'Login' },
  components: {
    LoadingButton
    // Logo,
  },
  props: {
    errors: Object
  },
  data() {
    return {
      sending: false,
      form: {
        email: 'anisur@yahoo.com',
        password: 'password',
        remember: null
      }
    };
  },
  methods: {
    submit() {
      const data = {
        email: this.form.email,
        password: this.form.password,
        remember: this.form.remember
      };

      this.$inertia.post(route('login.attempt'), data, {
        onStart: () => (this.sending = true),
        onFinish: () => (this.sending = false)
      });
    }
  }
};
</script>
