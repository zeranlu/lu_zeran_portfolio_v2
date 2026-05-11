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
                <form class="contact-form">
                    <div class="contact-field" id="first-name-field">
                        <label for="fname">
                            Enter your first name here
                        </label>

                        <input type="text" id="fname" placeholder="What's your first name?" required>
                    </div>

                    <div class="contact-field" id="last-name-field">
                        <label for="lname">
                            Enter your last name here
                        </label>

                        <input type="text" id="lname" placeholder="What's your last name?" required>
                    </div>

                    <div class="contact-field" id="email-field">
                        <label for="email">
                            Enter your e-mail here
                        </label>

                        <input type="email" id="email-field" placeholder="youremail@domain.com" required>
                    </div>

                    <div class="contact-field" id="message-field">
                        <label for="message">
                            Enter your message here
                        </label>
                        <textarea id="message-field" placeholder="Let's get down to business..." required></textarea>
                    </div>

                    <input id="submit-button" type="submit" value="Submit Form!">

                    <div class="contact-field" id="feedback-field">
                        <p>
                            Please fill out all required sections!
                        </p>
                    </div>
                </form>
            </div>
        </section>
    </main>
</template>

<script setup>
    import HeroSection from '@/components/home-page/HeroSection.vue'
</script>

<style scoped lang="scss">
</style>