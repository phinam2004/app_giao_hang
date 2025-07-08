// ignore_for_file: avoid_print

import 'package:geolocator/geolocator.dart';
import 'package:get/get.dart';
import 'package:get_storage/get_storage.dart';

class LocationController extends GetxController {
  Position position = Position(
    longitude: 0,
    latitude: 0,
    timestamp: DateTime.now(),
    accuracy: 1,
    altitude: 1,
    heading: 1,
    speed: 1,
    speedAccuracy: 1,
    altitudeAccuracy: 1,
    headingAccuracy: 1,
  );
  Position? currentPosition;
  final box = GetStorage();

  bool _isRequestingPermission = false;
  bool isLoading = false;

  getCurrentLocation() async {
    if (_isRequestingPermission) return;
    _isRequestingPermission = true;
    isLoading = true;
    update();
    try {
      LocationPermission permission = await Geolocator.checkPermission();
      if (permission == LocationPermission.denied ||
          permission == LocationPermission.deniedForever) {
        await Geolocator.requestPermission();
      }
      position = await Geolocator.getCurrentPosition(
        locationSettings: AndroidSettings(accuracy: LocationAccuracy.high),
      );
      currentPosition = position;
      update();
    } catch (e) {
      print(e.toString());
    } finally {
      isLoading = false;
      _isRequestingPermission = false;
      update();
    }
  }
}
