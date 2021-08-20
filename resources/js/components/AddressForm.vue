<template>
    <form method="get" action="/register-form">
        Name:
        <input type="text" name="name"/>
        Mail:
        <input type="text" name="email"/>
        Password:
        <input type="password" name="password"/>
        <button type="submit" name="submitRegister">Submit</button>
    </form>
</template>

<script>
export default {
    name: 'address-form',
}

</script>
