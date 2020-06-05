public class Sphere extends RoundShape {
    public Sphere(int xCenter, int yCenter, float radius) {
        super(xCenter, yCenter, radius);
    }

    public float area() {
        float surfaceArea = (float) (4.0 * Math.PI * Math.pow(radiusOfCircle, 2.0));
        return surfaceArea;
    }
}