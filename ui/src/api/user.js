import request from '@/utils/request'

export function getUsers(token) {
  return request({
    url: '/users',
    method: 'get',
    params: { token }
  })
}
