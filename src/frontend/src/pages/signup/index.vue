<template>
<section class="flex flex-col items-center justify-center">
	<Logo margin="mt-10" :width="50" :height="50" className="fill-gray-800" />
	<h2 class="mt-5 text-center text-xl font-medium text-gray-800">Signup</h2>
	<form
		on:submit={handleSubmit}
		class="mt-5 w-full max-w-xs rounded border border-gray-300 bg-white p-5 sm:p-5 md:max-w-[18rem]"
	>
		<Input id="email" :errorMessage="emailErrorMessage" :value="email" label="Email:" />
		<Input
            id="password"
			:errorMessage="passwordErrorMessage"
			type="password"
			:value="password"
			label="Password:"
		/>
		<Input
            id="repeatPassword"
			:errorMessage="repeatPasswordErrorMessage"
			type="password"
			:value="repeatPassword"
			label="Repeat Password:"
		/>
		<Button>Submit</Button>
	</form>

	<div
		class="mt-5 flex w-full max-w-xs items-center justify-center rounded border border-gray-300 p-5 sm:p-5 md:max-w-[18rem]"
	>
		<span class="text-sm"
			>Already have an account? <a
				href="/auth/signin"
				class="cursor-pointer text-blue-500 underline">Signin</a
			></span
		>
	</div>
</section>

</template>

<script lang="ts" setup>
import { ref } from "vue";

const email = ref("");
const password = ref("");
const repeatPassword = ref("");

const emailErrorMessage = ref("");
const passwordErrorMessage = ref("");
const repeatPasswordErrorMessage = ref("");

</script>