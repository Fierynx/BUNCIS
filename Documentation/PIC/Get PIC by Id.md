# Get PIC by Id

- Endpoint: `api/pic/{picId}`
- Method: `GET`
- Request Header:
  - Authorization: `Bearer {token}`
- Request Body:
- Url Parameter:
  - picId : `Integer`
- Response Body:
```
{
    "status": 200,
    "message": "Request successful.",
    "error": "",
    "data": {
        "id": 1,
        "name": "Ryu",
        "contact": "628123456789",
        "gender": "Male",
        "position": "PR",
        "CorporateId": 1,
        "created_at": "2024-08-08T19:28:50.000000Z",
        "updated_at": "2024-08-08T19:28:53.000000Z",
        "corporate": {
            "id": 1,
            "name": "tes",
            "date": "2024-08-08",
            "description": "tes",
            "created_at": "2024-08-08T12:04:19.000000Z",
            "updated_at": "2024-08-08T12:04:28.000000Z"
        }
    }
}
```

