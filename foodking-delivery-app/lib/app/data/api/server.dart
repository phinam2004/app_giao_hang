// ignore_for_file: depend_on_referenced_packages, prefer_collection_literals, prefer_typing_uninitialized_variables, avoid_print

import 'dart:io';

import 'package:get_storage/get_storage.dart';
import 'package:http/http.dart' as http;

import '../../../util/api-list.dart';

final box = GetStorage();

class Server {
  static String? bearerToken;

  static initClass({String? token}) {
    return bearerToken = box.read('token');
  }

  getRequest({String? endPoint}) async {
    if (endPoint == null) return null;
    HttpClient client = HttpClient();
    try {
      client.badCertificateCallback =
          ((X509Certificate cert, String host, int port) => true);
      return await http.get(Uri.parse(endPoint), headers: _getHttpHeaders());
    } catch (error) {
      return null;
    } finally {
      client.close();
    }
  }

  getRequestWithoutToken({String? endPoint}) async {
    if (endPoint == null) return null;
    HttpClient client = HttpClient();
    try {
      client.badCertificateCallback =
          ((X509Certificate cert, String host, int port) => true);
      return await http.get(
        Uri.parse(endPoint),
        headers: _getHttpHeadersNotToken(),
      );
    } catch (error) {
      return null;
    } finally {
      client.close();
    }
  }

  postRequest({String? endPoint, String? body}) async {
    if (endPoint == null) return null;
    HttpClient client = HttpClient();
    try {
      client.badCertificateCallback =
          ((X509Certificate cert, String host, int port) => true);
      return await http.post(
        Uri.parse(endPoint),
        headers: getAuthHeaders(),
        body: body,
      );
    } catch (error) {
      //  return null;
    } finally {
      client.close();
    }
  }

  postRequestWithToken({String? endPoint, String? body}) async {
    if (endPoint == null) return null;
    HttpClient client = HttpClient();
    try {
      client.badCertificateCallback =
          ((X509Certificate cert, String host, int port) => true);
      return await http.post(
        Uri.parse(endPoint),
        headers: _getHttpHeaders(),
        body: body,
      );
    } catch (error) {
      return null;
    } finally {
      client.close();
    }
  }

  putRequest({String? endPoint, String? body}) async {
    if (endPoint == null) return null;
    HttpClient client = HttpClient();
    try {
      client.badCertificateCallback =
          ((X509Certificate cert, String host, int port) => true);
      return await http.put(
        Uri.parse(endPoint),
        headers: _getHttpHeaders(),
        body: body,
      );
    } catch (error) {
      return null;
    } finally {
      client.close();
    }
  }

  Future<http.StreamedResponse?> multipartRequest(
    String endPoint,
    String? filepath,
  ) async {
    if (filepath == null || endPoint.isEmpty) {
      print('Invalid file path or endpoint');
      return null;
    }

    try {
      final request =
          http.MultipartRequest('POST', Uri.parse(endPoint))
            ..headers['Authorization'] = initClass()
            ..headers['x-api-key'] = APIList.licenseCode!
            ..files.add(await http.MultipartFile.fromPath('image', filepath));

      return await request.send();
    } catch (e) {
      print('Upload error: $e');
      return null;
    }
  }

  // multipartRequest(endPoint, String? filepath) async {
  //   Map<String, String> headers = {
  //     'Authorization': initClass(),
  //     'Content-Type': 'multipart/form-data',
  //   };

  //   HttpClient client = HttpClient();
  //   try {
  //     var request;
  //     request = http.MultipartRequest('POST', Uri.parse(endPoint!))
  //       ..headers.addAll(headers)
  //       ..files.add(await http.MultipartFile.fromPath('image', filepath!));
  //     return await request.send();
  //   } catch (error) {
  //     print(error);
  //     return null;
  //   } finally {
  //     client.close();
  //   }
  // }

  deleteRequest({String? endPoint}) async {
    HttpClient client = HttpClient();
    try {
      client.badCertificateCallback =
          ((X509Certificate cert, String host, int port) => true);
      return await http.delete(
        Uri.parse(endPoint!),
        headers: _getHttpHeaders(),
      );
    } catch (error) {
      return null;
    } finally {
      client.close();
    }
  }

  static Map<String, String> _getHttpHeaders() {
    Map<String, String> headers = Map<String, String>();
    headers['Authorization'] = box.read('token');
    headers['x-api-key'] = APIList.licenseCode.toString();
    headers['content-type'] = 'application/json';
    return headers;
  }

  static Map<String, String> _getHttpHeadersNotToken() {
    Map<String, String> headers = Map<String, String>();
    headers['x-api-key'] = APIList.licenseCode.toString();
    headers['content-type'] = 'application/json';
    return headers;
  }

  static Map<String, String> getAuthHeaders() {
    Map<String, String> headers = Map<String, String>();
    headers['x-api-key'] = APIList.licenseCode.toString();
    headers['content-type'] = 'application/json';

    return headers;
  }
}
