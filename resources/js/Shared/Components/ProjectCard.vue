<template>
    <a class="project-card" :href="route('project.view',id)">
        <div class="project-card-header">
          <img :src="'/public/uploads/projects/' + icon" alt="">
            <p hidden>{{icon}}</p>
        </div>
        <div class="project-card-body">
            <div class="card-body-header">
                <h4>{{title}} ({{id}})</h4><span class="project-deadline-date">до 12.2022</span>
            </div>
            <p class="card-body-p">{{description}}</p>
            {{employer_id}}
            <span :class="'bg-'+statusColor+'-100 text-'+statusColor+'-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-'+statusColor+'-200 dark:text-'+statusColor+'-800'">
              {{ statusTest }}
            </span>
        </div>
      </a>

</template>

<script>
    export default {
        name: "ProjectCard",
        props: {
            id: Number,
            title: String,
            employer: String,
            description: String,
            status: Number,
            icon: String,
        },
        setup(props) {
            var statusColor = "gray"
            var statusTest = "не начат"
            switch (props.status) {
                case "0":
                    statusColor = "gray"
                    statusTest = "не начат"
                    break
                case "1":
                    statusColor = "green"
                    statusTest = "активен"
                    break
                case "2":
                    statusColor = "yellow"
                    statusTest = "приостановлен"
                    break
                case "3":
                    statusColor = "red"
                    statusTest = "отменен"
                    break
                case "4":
                    statusColor = "purple"
                    statusTest = "закончен"
                    break

            }
            return {
                statusColor,
                statusTest
            }
        }
    }

</script>

<style scoped>

</style>
