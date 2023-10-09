
import countdown from "./countdown.min.cjs";
export default function timeago({
    strdate,
    id,
    dateLabel = ["years", "months", "days", "hours", "minutes", "seconds"],
    interval = 1000,
    prefix = '',
    suffix = '',
}) {
    return {
        strdate,
        dateLabel,
        interval,
        id,
        prefix,
        suffix,
        getTimeAgo() {
            const date1 = new Date();
            const date2 = new Date(this.strdate * 1000)
            let diff = countdown(date2, date1)
            const difference = [diff.years, diff.months, diff.days, diff.hours, diff.minutes, diff.seconds];

            let datestring = '';
            difference.forEach((val, i) => {
                if (val > 0) {
                    if (datestring != '') {
                        datestring += ' ';
                    }
                    datestring += val + this.dateLabel[i];
                }
            })

            if (this.prefix) datestring = this.prefix + ' ' + datestring;

            if (this.suffix) datestring = datestring + ' ' + this.suffix;
            return datestring

        },
        init() {
            document.getElementById(this.id).innerHTML = this.getTimeAgo()
            this.getTimeAgo();
            setInterval(() => {
                document.getElementById(this.id).innerHTML = this.getTimeAgo()
            }, this.interval);
        }
    }
}