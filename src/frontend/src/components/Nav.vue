<template>
    <nav class="flex justify-center border-b border-b-gray-300 bg-white">
	<div class="mx-2 flex w-full max-w-[80rem] flex-row items-center justify-between py-3">
		<Logo :width="30" :height="30" />
		<div class="flex flex-row items-center">
			<a class=" cursor-pointer" href="/">Home</a>
			{#if user}
				<button
					class="ml-5 cursor-pointer"
					type="button"
					on:click={handleSignout}
					aria-label="Signout">Signout</button
				>
			{:else}
				<a class="ml-5 cursor-pointer" href="/auth/signin">Signin</a>
				<a class="ml-5 cursor-pointer" href="/auth/signup">Signup</a>
			{/if}
		</div>
	</div>
</nav>

</template>