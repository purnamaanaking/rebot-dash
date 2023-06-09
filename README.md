
# Re-Bot Dashboard

Dashboard of  Rehabilitation Robot




## Screenshots

![App Screenshot](https://awesomescreenshot.s3.amazonaws.com/image/756918/40599055-36d66507d69971e01cb213ba873af2c2.png?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAJSCJQ2NM3XLFPVKA%2F20230609%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Date=20230609T021129Z&X-Amz-Expires=28800&X-Amz-SignedHeaders=host&X-Amz-Signature=2536dee9baf5e2cc322c28c74f3780a679f162838e7e23607629fdbe68db2d68)


## API Reference

### 1. Add Exercise

```http
  POST /api/exercises
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `code` | `string` | **Required**. Exercise Code |
| `start_time` | `dateTime ` | **Nullable**. Example: `2023-06-07 10:28:00` |
| `end_time` | `dateTime ` | **Nullable**. Example: `2023-06-07 10:30:00` |

#### Body (JSON Content)

```
{
  "code": "RB001-004",
  "start_time": "2023-06-07 10:28:00"
}
```

#### Response 

```
{
  "success": true,
  "message": "Exercise Data Added Successfully",
  "data": {
    "code": "RB001-004",
    "start_time": "2023-06-07 10:28:00",
    "end_time": null,
    "updated_at": "2023-06-08T01:58:54.000000Z",
    "created_at": "2023-06-08T01:58:54.000000Z",
    "id": 4
  }
}
```

### 2. Add Exercise Detail

```http
  POST /api/exercise-details
```

| Parameter | Type     | Description                       |
| :-------- | :------- | :-------------------------------- |
| `exercise_id` | `integer` | **Required**. Id of Exercise |
| `duration` | `decimal` | **Required**. Exercise Duration |
| `position` | `decimal` | **Required**. Ankle Position (P Value) |
| `vout` | `decimal` | **Required**. Ankle Angular Velocity (VOUT Value) |
| `dorsimax` | `decimal` | **Required**. Maximum Dorsiflexion |
| `plantarmax` | `decimal` | **Required**. Maximum Plantarflexion |
| `rom` | `decimal` | **Required**. Range of Motion |
| `percentage` | `decimal` | **Required**. Correct Gait Sequence Percentage |
| `step_amount` | `decimal` | **Required**. Number of Steps |
| `step_duration` | `decimal` | **Required**. Correct Step Duration |
| `step_per_second` | `decimal` | **Required**. Steps Per Second |

#### Body (JSON Content)

```
{
  "data": [
    {
      "exercise_id": 1,
      "duration": 120,
      "position": 0.04,
      "vout": -0.87,
      "dorsimax": 0.36,
      "plantarmax": -0.01,
      "rom": 0.37,
      "percentage": 95,
      "step_amount": 60,
      "step_duration": 1.2,
      "step_per_second": 0.83
    },
    {
      "exercise_id": 1,
      "duration": 120,
      "position": 0.04,
      "vout": -0.87,
      "dorsimax": 0.36,
      "plantarmax": -0.01,
      "rom": 0.37,
      "percentage": 95,
      "step_amount": 60,
      "step_duration": 1.2,
      "step_per_second": 0.83
    }
  ]
}
```

#### Response 

```
{
  "success": true,
  "message": "Exercise details data added successfully",
  "data": [
    {
      "exercise_id": 1,
      "duration": 120,
      "position": 0.04,
      "vout": -0.87,
      "dorsimax": 0.36,
      "plantarmax": -0.01,
      "rom": 0.37,
      "percentage": 95,
      "step_amount": 60,
      "step_duration": 1.2,
      "step_per_second": 0.83
    },
    {
      "exercise_id": 1,
      "duration": 120,
      "position": 0.04,
      "vout": -0.87,
      "dorsimax": 0.36,
      "plantarmax": -0.01,
      "rom": 0.37,
      "percentage": 95,
      "step_amount": 60,
      "step_duration": 1.2,
      "step_per_second": 0.83
    }
  ]
}
```

### 3. Update Exercise

```http
  POST /api/exercises/{exercise_id}
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `code` | `string` | **Required**. Exercise Code |
| `start_time` | `dateTime ` | **Nullable**. Example: `2023-06-07 10:28:00` |
| `end_time` | `dateTime ` | **Nullable**. Example: `2023-06-07 10:30:00` |
| `_method` | `string ` | **Required**. Fill with: `PUT` |

#### Body (JSON Content)

```
{
  "code": "RB001-001",
  "end_time": "2023-06-07 10:30:00",
  "_method": "PUT"
}
```

#### Response 

```
{
  "success": true,
  "message": "Exercise Data Updated Successfully",
  "data": {
    "id": 1,
    "code": "RB001-001",
    "start_time": "2023-06-07 10:28:00",
    "end_time": "2023-06-07 10:30:00",
    "created_at": "2023-06-08T01:50:01.000000Z",
    "updated_at": "2023-06-08T01:50:29.000000Z"
  }
}
```


## Authors

- [@purnamaanaking](https://github.com/purnamaanaking)

