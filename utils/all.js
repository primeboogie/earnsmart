// api.js
export async function requestData(url, method = "GET", myBody = null) {
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

    try {
        const response = await fetch(url, request);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
        return data; // Return the data for use in calling context
    } catch (error) {
        console.error('Error fetching data:', error);
        throw error; // Re-throw the error if you need to handle it further up
    }
}
