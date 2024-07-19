export default function requestData(url, method = "GET", myBody = null) {
    let request = {
        method: method,
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json"
        }
    };

    if (myBody !== null) {
        request.body = JSON.stringify(myBody);
    }

    const fetchData = async () => {
        try {
            const response = await fetch(url, request);
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            const data = await response.json();
            console.log(data);
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    };

    fetchData();
}

requestData("https://api.greatmullah.com/countrys/")


//  reg 500 550


// l1 = 250 0.48 = 
// l2 = 150 0.30 = 
// l3 = 50 0.10 = 