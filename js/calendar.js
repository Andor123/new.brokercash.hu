const calendarBody = document.getElementById('calendar-body');
const monthYearDisplay = document.getElementById('monthYear');
const prevMonthBtn = document.getElementById('prevMonth');
const nextMonthBtn = document.getElementById('nextMonth');

let currentDate = new Date();

function renderCalendar() {
    calendarBody.innerHTML = '';
    monthYearDisplay.textContent = new Date(currentDate).toLocaleString('hu-HU', { month: 'long', year: 'numeric' });

    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    const firstDayOfMonth = new Date(year, month, 1).getDay();
    const firstDayIndex = (firstDayOfMonth === 0) ? 6 : firstDayOfMonth - 1;

    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const daysInPrevMonth = new Date(year, month, 0).getDate();

    let dayCounter = 1;
    let prevMonthDayStart = daysInPrevMonth - firstDayIndex + 1;

    for (let i = 0; i < 6; i++) {
        const row = document.createElement('tr');
        for (let j = 0; j < 7; j++) {
            const cell = document.createElement('td');
            if (i === 0 && j < firstDayIndex) {
                cell.textContent = prevMonthDayStart++;
                cell.classList.add('prev-month');
            } else if (dayCounter <= daysInMonth) {
                cell.textContent = dayCounter;
                cell.classList.add('current-month');
                if (dayCounter === new Date().getDate() && month === new Date().getMonth() && year === new Date().getFullYear()) {
                    cell.classList.add('today');
                }
                dayCounter++;
            } else {
                cell.textContent = dayCounter - daysInMonth;
                cell.classList.add('next-month');
                dayCounter++;
            }
            row.appendChild(cell);
        }
        calendarBody.appendChild(row);
        if (dayCounter > daysInMonth && prevMonthDayStart > daysInPrevMonth) break;
    }
}

prevMonthBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

nextMonthBtn.addEventListener('click', () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});

renderCalendar();