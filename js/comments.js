new Vue({
    el: '#content-comments',
    data: {
        base_url: '/wp-json/wp/v2/comments',
        current_url: '',
        children_url: '',
        post_id: '',
        headers: [],
        comments: [],
        page_count: 1,
        author_name: '',
        author_email: '',
        author_url: '',
        content: '',
        parent: 0,
        reply_to: ''
    },
    mounted() {
        this.current_url = this.base_url + '?post=' + this.post_id;
        axios.get(this.current_url)
            .then(res => {
                this.headers = res.headers;
                this.comments = res.data;
            })
            .catch(error => {
                console.log(error);
            })
    },
    methods: {
        loadmore: function () {
            this.page_count += 1;
            this.current_url = this.current_url + '&page=' + this.page_count;
            axios.get(this.current_url)
                .then(res => {
                    this.comments = this.comments.concat(res.data);
                })
                .catch(error => {
                    console.log(error);
                })
        },
        create_comment: function () {
            if (this.author_name && this.author_email && this.content) {
                var reg = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
                if (reg.test(this.author_email)){
                    axios.post(this.base_url, {
                        author_name: this.author_name,
                        author_email: this.author_email,
                        author_url: this.author_url,
                        content: this.content,
                        parent: this.parent,
                        post: this.post_id,
                    })
                    .then(res => {
                        alert('评论已提交，等待管理员审核！');
                        this.author_name = '';
                        this.author_email = '';
                        this.author_url = '';
                        this.content = '';

                        console.log(res);
                    })
                    .catch(error => {
                        alert('发表评论出错，请联系管理员！');
                        console.log(error);
                    });
                } else {
                    alert('E-mail 格式不正确！');
                }

            } else {
                alert('昵称、E-mail以及评论内容必须填写！');
            }

        },
        reply: function (id, author_name) {
            this.parent = id;
            this.reply_to = author_name;
        }
    },
    filters: {
        date_format: function (value) {
            return value.replace('T', ' ');
        }
    }
});
