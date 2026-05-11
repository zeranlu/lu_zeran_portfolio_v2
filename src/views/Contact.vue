<template>
    <main>
        <h1 class="hidden">Contact Page</h1>

        <HeroSection />
        
        <section class="contact-section content-con">
            <h2>Contact Me</h2>

            <div class="contact-text-con">
                <p>
                    Thank you for taking the time to visit my portfolio. I would love to engage in future projects with you. To see more of my work, refer to my projects archives here: <a class="highlight" href="">www.github.com/zeranlu.</a>
                    <br>
                    <br>
                    If you wish to contact me, please fill in the required fields below and I will get back to you within 24 hours of contact! Feel free to include any contact method you would prefer in the message below!
                </p>
            </div>

            <div class="contact-form-con">
                <form class="contact-form" @submit.prevent="handleSubmit">
                    <div class="contact-field" id="first-name-field">
                        <label for="fname">
                            Enter your first name here
                        </label>

                        <input type="text" id="fname" v-model="form.fname" placeholder="What's your first name?" required>
                    </div>

                    <div class="contact-field" id="last-name-field">
                        <label for="lname">
                            Enter your last name here
                        </label>

                        <input type="text" id="lname" v-model="form.lname" placeholder="What's your last name?" required>
                    </div>

                    <div class="contact-field" id="email-field">
                        <label for="email">
                            Enter your e-mail here
                        </label>

                        <input type="email" id="email" v-model="form.email" placeholder="youremail@domain.com" required>
                    </div>

                    <div class="contact-field" id="message-field">
                        <label for="message">
                            Enter your message here
                        </label>

                        <textarea id="message" v-model="form.message" placeholder="Let's get down to business..." required></textarea>
                    </div>

                    <input id="submit-button" type="submit" value="Submit Form!">

                    <div class="contact-field" id="feedback-field" v-if="feedback.errors.length || feedback.message" ref="feedbackField">
                        <p v-if="feedback.message">{{ feedback.message }}</p>
                        <p v-for="(error,index) in feedback.errors" :key="index">{{ error }}</p>
                    </div>
                </form>
            </div>
        </section>
    </main>
</template>

<script setup>
    import HeroSection from '@/components/home-page/HeroSection.vue'

    import { ref, watch, onMounted, onUnmounted } from 'vue'

    const form = ref({
        fname: '',
        lname: '',
        email: '',
        message: ''
    })

    const feedback = ref({
        errors: [],
        message: ''
    })

    const feedbackField = ref(null)

</script>

<style scoped lang="scss">
</style>