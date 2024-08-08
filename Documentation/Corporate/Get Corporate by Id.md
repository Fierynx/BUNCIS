# Get Corporate by Id

- Endpoint: `api/corporate/{corporateId}`
- Method: `GET`
- Request Header:
  - Authorization: `Bearer {token}`
- Request Body:
- Url Parameter:
  - corporateId : `Integer`
- Response Body:
```
{
    "status": 200,
    "message": "Request successful.",
    "error": "",
    "data": {
        "id": 1,
        "name": "tes",
        "date": "2024-08-08",
        "description": "tes",
        "created_at": "2024-08-08T12:04:19.000000Z",
        "updated_at": "2024-08-08T12:04:28.000000Z"
    }
}
```

