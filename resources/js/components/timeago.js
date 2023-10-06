export default function timeago({
    strdate,
    id,
    dateLabel = ["years", "months", "days", "hours", "minutes", "seconds"],
    interval = 1000,
}) {
    return {
        strdate,
        dateLabel,
        interval,
        id,
        getTimeAgo() {
            var date1 = new Date();
            var date2 = new Date(this.strdate * 1000)

            let time = (date2.getTime() - date1.getTime()) < 0 ? false : true, // work out which is the later date
                laterDate = time ? date2 : date1,
                earlierDate = time ? date1 : date2,
                secondDiff = laterDate.getSeconds() - earlierDate.getSeconds(),
                minuteDiff = laterDate.getMinutes() - earlierDate.getMinutes(),
                hourDiff = laterDate.getHours() - earlierDate.getHours(),
                dayDiff = laterDate.getDate() - earlierDate.getDate(),
                monthDiff = laterDate.getMonth() - earlierDate.getMonth(), // javascript uses zero-indexed months (0-11 rather than the more conventional 1-12)
                yearDiff = laterDate.getFullYear() - earlierDate.getFullYear(),
                months = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];


            if (secondDiff < 0) {
                minuteDiff--;
                secondDiff = 60 + secondDiff
            }

            if (minuteDiff < 0) {
                hourDiff--;
            }

            if (hourDiff < 0) {
                dayDiff--;
            }

            if (dayDiff < 0) {
                monthDiff--;
                dayDiff += months[laterDate.getMonth() - 1]; // -1 because we want the previous month
            }

            if (monthDiff < 0) {
                yearDiff--;
                monthDiff += 12;
            }

            let datestring = '';

            [yearDiff, monthDiff, dayDiff, hourDiff, minuteDiff, secondDiff].forEach((val, i) => {
                if (val > 0) {
                    if (datestring != '') {
                        datestring += ' ';
                    }

                    datestring += val + this.dateLabel[i];
                }
            })

            return datestring;
        },
        init() {
            document.getElementById(this.id).innerHTML = this.getTimeAgo()
            setInterval(() => {
                document.getElementById(this.id).innerHTML = this.getTimeAgo()
            }, this.interval);
        }
    }
}