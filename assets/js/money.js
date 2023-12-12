
    class MoneyFormatter {
        static format(element) {
            const value = parseInt(element.innerText.replace(".", "").replace(",", ""));
            element.innerText = value.toLocaleString("vi-VN");
        }

        static formatAll(className) {
            const elements = document.querySelectorAll(`.${className}`);
            elements.forEach((element) => {
                this.format(element);
            });
        }
    }

    MoneyFormatter.formatAll("money");