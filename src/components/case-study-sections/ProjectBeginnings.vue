<template>
    <div class="project-beginning content-con">
        <h2>Project Beginnings</h2>

        <h3>{{ caseStudyInfo.proj_name }}</h3>

        <div class="project-beginning-img-con">
            <img :src="caseStudyInfo.proj_image_link_1" :alt="`Sketch images of ${caseStudyInfo.proj_name}`" class="hidden">
        </div>

        <div class="case-study-lists-con">
            <div class="case-study-list-wrapper" id="project-specs">
                <h4>Project Specs</h4>

                <ul class="case-study-list-ul">
                    <li class="case-study-list-li"
                        v-for="spec in caseStudyInfo.specs"
                        :key="spec.proj_spec_id">
                        <button class="case-study-button">
                            {{ spec.proj_spec }}
                            <p class="hidden-text">{{ spec.proj_spec_expanded }}</p>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="case-study-list-wrapper" id="personal-goals">
                <h4>Personal Goals</h4>

                <ul class="personal-goals-list">
                    <li class="personal-goals-li"
                        v-for="goal in caseStudyInfo.goals"
                        :key="goal.personal_goal_id">
                        <button class="case-study-button">
                            {{ goal.personal_goal }}
                            <p class="hidden-text">{{ goal.personal_goal_expanded }}</p>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</template>

<script setup>
    defineProps({
        caseStudyInfo: Object
    })
</script>

<style scoped lang="scss">

.case-study-lists-con {
    background-color: red;
    margin: 5%;

    display: flex;
    flex-direction: row;
}

.case-study-list-wrapper {
    background-color: blue;
    margin: 5%;

    flex: 1;

    display: flex;
    flex-direction: column;
}

.case-study-list-ul {
    background-color: green;
    margin: 5%;
}

.case-study-list-li {
    background-color: yellow;
    margin: 5%;
}
    
</style>