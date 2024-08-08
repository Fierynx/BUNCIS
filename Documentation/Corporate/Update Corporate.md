# Update Corporate

- Endpoint: `api/corporate/{corporateId}`
- Method: `PATCH`
- Request Header:
  - Authorization: `Bearer {token}`
- Request Body:
  - name: `String (required)`
  - date: `Date (required)`
  - description: `String (required)`
- Url Parameter:
  - corporateId : `Integer`
- Response Body:

```
{
    "status": 200,
    "message": "Request successful.",
    "error": "",
    "data": ""
}
```

