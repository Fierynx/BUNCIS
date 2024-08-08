# Store PIC

- Endpoint: `api/pic`
- Method: `POST`
- Request Header:
  - Authorization: `Bearer {token}`
- Request Body:
  - name: `String (required)`
  - contact: `String (required)`
  - gender: `String (required|in:Male,Female)`
  - position: `String (required)`
  - CorporateId: `Integer (required)`
- Url Parameter:
- Response Body:

```
{
    "status": 200,
    "message": "Request successful.",
    "error": "",
    "data": {
        "name": "Ryu",
        "contact": "628123456789",
        "gender": "Male",
        "position": "PR",
        "CorporateId": 1,
        "updated_at": "2024-08-08T19:28:53.000000Z",
        "created_at": "2024-08-08T19:28:50.000000Z",
        "id": 1
    }
}
```

