document.addEventListener('DOMContentLoaded', function () {
    const buildingInfo = document.getElementById('building-info');
    const roomList = document.getElementById('room-list');
    const mapContainer = document.querySelector('.map-container');

    // Building and room data (You can replace it with your data)
    const buildingData = {
        'Building A': ['Room 101', 'Room 102', 'Room 103'],
        'Building B': ['Room 201', 'Room 202', 'Room 203'],
        'Building C': ['Room 301', 'Room 302', 'Room 303']
    };

    // Define coordinates for each red dot
    const redDots = [
        { x: 200, y: 300, buildingName: 'Building A' },
        { x: 300, y: 150, buildingName: 'Building B' },
        { x: 500, y: 150, buildingName: 'Building C' }
    ];

    // Create and position red dot elements for each red dot
    redDots.forEach(dotData => {
        const dot = document.createElement('div');
        dot.classList.add('dot');
        dot.style.left = dotData.x + 'px';
        dot.style.top = dotData.y + 'px';
        mapContainer.appendChild(dot);

        // Attach event listener to each red dot
        dot.addEventListener('click', function() {
            displayRooms(dotData.buildingName);
            buildingInfo.style.display = 'block'; // Show building info
        });
    });

    // Function to display rooms of a building
    function displayRooms(buildingName) {
        const rooms = buildingData[buildingName];
        roomList.innerHTML = ''; // Clear previous rooms
        rooms.forEach(room => {
            const li = document.createElement('li');
            li.textContent = room;
            roomList.appendChild(li);
        });
    }

    // Hide building info initially
    buildingInfo.style.display = 'none';
});
