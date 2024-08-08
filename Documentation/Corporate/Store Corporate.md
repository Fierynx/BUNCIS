# Store Corporate

- Endpoint: `api/corporate`
- Method: `POST`
- Request Header:
  - Authorization: `Bearer {token}`
- Request Body:
  - name: `String (required)`
  - date: `Date (required)`
  - description: `String (required)`
- Url Parameter:
- Response Body:

```
{
    "status": 200,
    "message": "Request successful.",
    "error": "",
    "data": {
        "name": "Tech in Asia",
        "date": "2024-08-08",
        "description": "ini deskripsi",
        "updated_at": "2024-08-08T12:04:19.000000Z",
        "created_at": "2024-08-08T12:04:19.000000Z",
        "id": 1
    }
}
```

