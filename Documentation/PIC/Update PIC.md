# Update PIC

- Endpoint: `api/pic/{picId}`
- Method: `PATCH`
- Request Header:
  - Authorization: `Bearer {token}`
- Request Body:
  - name: `String (required)`
  - contact: `String (required)`
  - gender: `String (required|in:Male,Female)`
  - position: `String (required)`
  - CorporateId: `Integer (required)`
- Url Parameter:
  - picId : `Integer`
- Response Body:

```
{
    "status": 200,
    "message": "Request successful.",
    "error": "",
    "data": ""
}
```