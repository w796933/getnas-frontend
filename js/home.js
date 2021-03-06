new Vue({
    el: '#app',
    data: {
        search_text: '',
        base_url: '/wp-json/wp/v2/',
        current_url: '',
        order: 'desc',
        category: '',
        tag: '',
        guides: [],
        headers: [],
        count: 1,
        loadflash: false
    },
    mounted() {
        this.current_url = this.base_url + 'posts?_embed';

        if (this.category) {
            this.current_url = this.current_url + '&categories=' + this.category;
        }

        if (this.tag) {
            this.current_url = this.current_url + '&tags=' + this.tag;
        }

        this.loadflash = true;

        axios.get(this.current_url)
            .then(response => {
                this.guides = response.data;
                this.headers = response.headers;
                this.loadflash = false;
            })
            .catch(function(error) {
                console.log(error);
            });
    },
    methods: {
        loadmore: function() {
            this.count += 1;
            this.loadflash = true;
            axios.get(this.current_url + '&page=' + this.count)
                .then(response => {
                    this.guides = this.guides.concat(response.data);
                    this.loadflash = false;
                })
                .catch(error => {
                    console.log(error)
                });
        },
        search: function() {
            this.guides = [];
            this.loadflash = true;
            this.current_url = this.current_url + '&search=' + this.search_text;
            axios.get(this.current_url)
                .then(response => {
                    this.guides = response.data;
                    this.headers = response.headers;
                    this.loadflash = false;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        order_changed: function() {
            // 对已获取的 JSON 对象按时间排序
            if (this.order == 'asc') {
                this.guides = this.guides.sort(function(a, b) {
                    return new Date(a.date).getTime() - new Date(b.date).getTime();
                });
            } else {
                this.guides = this.guides.sort(function(a, b) {
                    return new Date(b.date).getTime() - new Date(a.date).getTime();
                });
            }
        },
        coming_soon: function() {
            alert('功能即将开放，敬请期待！');
        }
    },
    filters: {
        // 格式化时间，显示内容发布于多久以前
        timeago: function(value) {
            var minute = 1000 * 60;
            var hour = minute * 60;
            var day = hour * 24;
            var halfamonth = day * 15;
            var month = day * 30;
            var year = month * 12
            var now = new Date().getTime();
            var diffValue = now - Date.parse(value);
            if (diffValue < 0) {
                return;
            }
            var yearC = diffValue / year;
            var monthC = diffValue / month;
            var weekC = diffValue / (7 * day);
            var dayC = diffValue / day;
            var hourC = diffValue / hour;
            var minC = diffValue / minute;
            if (yearC >= 1) {
                result = "" + parseInt(yearC) + " 年前";
            } else if (monthC >= 1) {
                result = "" + parseInt(monthC) + " 月前";
            } else if (weekC >= 1) {
                result = "" + parseInt(weekC) + " 周前";
            } else if (dayC >= 1) {
                result = "" + parseInt(dayC) + " 天前";
            } else if (hourC >= 1) {
                result = "" + parseInt(hourC) + " 小时前";
            } else if (minC >= 1) {
                result = "" + parseInt(minC) + " 分钟前";
            } else
                result = "刚刚";
            return result;
        }
    }
});