const calendarBody = document.getElementById('calendarBody');
const currentMonthYear = document.getElementById('currentMonthYear');
const prevMonthBtn = document.getElementById('prevMonth');
const nextMonthBtn = document.getElementById('nextMonth');

let currentDate = new Date();

function renderCalendar() {
    calendarBody.innerHTML = '';
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();

    currentMonthYear.textContent = new Date(year, month).toLocaleString('hu-HU', { month: 'long', year: 'numeric' });

    const firstDayOfMonth = new Date(year, month, 1);

    let startDay = firstDayOfMonth.getDay();
    if (startDay === 0) {
        startDay = 6;
    } else {
        startDay--;
    }

    const daysInMonth = new Date(year, month + 1, 0).getDate();

    let date = 1;
    for (let i = 0; i < 6; i++) {
        const row = document.createElement('tr');
        for (let j = 0; j < 7; j++) {
            const cell = document.createElement('td');
            if (i === 0 && j < startDay) {
                cell.classList.add('empty');
            } else if (date > daysInMonth) {
                cell.classList.add('empty');
            } else {
                cell.textContent = date;
                cell.dataset.date = `${year}-${month + 1}-${date}`;
                cell.addEventListener('click', handleDateClick);

                const today = new Date();
                if (date === today.getDate() && month === today.getMonth() && year === today.getFullYear()) {
                    cell.classList.add('today');
                }
                date++;
            }
            row.appendChild(cell);
        }
        calendarBody.appendChild(row);
        if (date > daysInMonth) break;
    }
}

function handleDateClick(event) {
    const previouslySelected = document.querySelector('.calendar-grid td.selected');
    if (previouslySelected) {
        previouslySelected.classList.remove('selected');
        previouslySelected.removeAttribute('name');
    }

    event.target.classList.add('selected');
    event.target.setAttribute("name", 'selected');
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