set nocount on
SELECT COUNT(roomno)
FROM room_list
WHERE (sta = 'OC')