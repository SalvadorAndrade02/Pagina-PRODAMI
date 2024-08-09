<script>
export default {
    props: {
        animation: {
            type: String,
            required: true
        }
    },
    data() {
        return {
            animationClass: ''
        };
    },
    mounted() {
        this.createIntersectionObserver();
    },
    methods: {
        createIntersectionObserver() {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.animationClass = `animate__animated ${this.animation}`;
                    } else {
                        this.animationClass = '';
                    }
                });
            });

            observer.observe(this.$refs.animatedElement);
        }
    }
}
</script>